<?php
declare(strict_types=1);

/**
 * One-off generator: splits service_pages_all.php into per-page _bundle-audit-vars.php
 * with $audit* variable names (same as pages/audit.php components expect).
 *
 * Run from repo root:
 *   php scripts/gen-service-bundles-from-service-pages-all.php
 */

$root = dirname(__DIR__);
$srcPath = $root . '/service_pages_all.php';
$src = file_get_contents($srcPath);
if ($src === false) {
    fwrite(STDERR, "Cannot read: {$srcPath}\n");
    exit(1);
}

$sections = [
    ['prefix' => 'taxConsulting', 'dir' => 'pages/konsalting', 'hero' => '/img/audit/kompleksnyy-audit.webp'],
    ['prefix' => 'financialConsulting', 'dir' => 'pages/finans', 'hero' => '/img/audit/Initsiativnyy-audit.webp'],
    ['prefix' => 'accountingOutsourcing', 'dir' => 'pages/buhgalteriya', 'hero' => '/img/audit/finansovyy-audit.webp'],
    ['prefix' => 'forensic', 'dir' => 'pages/forenzik', 'hero' => '/img/audit/forenzik.jpg'],
    ['prefix' => 'hrAudit', 'dir' => 'pages/kadrovyy-audit', 'hero' => '/img/audit/kardovii-auditjpg.jpg'],
    ['prefix' => 'ifrsReporting', 'dir' => 'pages/msfo', 'hero' => '/img/audit/kompleksnyy-audit.webp'],
    ['prefix' => 'complianceRiskControl', 'dir' => 'pages/komplaens', 'hero' => '/img/audit/kompleksnyy-audit.webp'],
    ['prefix' => 'businessSupport', 'dir' => 'pages/biznes-konsalting', 'hero' => '/img/audit/kompleksnyy-audit.webp'],
    ['prefix' => 'hsepAcademy', 'dir' => 'pages/hsep', 'hero' => '/img/audit/nalogovyy-audit.webp'],
    ['prefix' => 'dueDiligence', 'dir' => 'pages/due-diligence', 'hero' => '/img/audit/DUE diligence.jpg'],
];

// Split BEFORE each section banner, but keep the opening `/* ... */` comment in the chunk.
$marker = '#\R(?=/\* ={10,}\R)#u';
$parts = preg_split($marker, $src);
if ($parts === false) {
    fwrite(STDERR, "preg_split failed\n");
    exit(1);
}

// Drop leading chunk (opening <?php + preamble before first section banner)
array_shift($parts);

if (count($parts) !== count($sections)) {
    fwrite(STDERR, 'Unexpected section count: ' . count($parts) . ' (expected ' . count($sections) . ")\n");
    exit(1);
}

$prefixReplacements = [
    '$complianceRiskControl' => '$audit',
    '$accountingOutsourcing' => '$audit',
    '$financialConsulting' => '$audit',
    '$businessSupport' => '$audit',
    '$taxConsulting' => '$audit',
    '$ifrsReporting' => '$audit',
    '$dueDiligence' => '$audit',
    '$hsepAcademy' => '$audit',
    '$forensic' => '$audit',
    '$hrAudit' => '$audit',
];

for ($i = 0; $i < count($sections); $i++) {
    $block = (string) $parts[$i];
    $block = ltrim($block);
    // Strip the first section banner comment (multiline, includes '=' rulers).
    $block = preg_replace('#^/\*[\s\S]*?\*/\s*#', '', $block, 1);
    $block = ltrim($block);

    $block = strtr($block, $prefixReplacements);

    $hero = $sections[$i]['hero'];
    $block = preg_replace('/\$serviceCoverHeroBgUrl\s*=\s*\'[^\']*\';/', '$serviceCoverHeroBgUrl = \'' . $hero . '\';', $block, 1);
    $block = preg_replace('/\$auditFinalCtaBgUrl\s*=\s*\'[^\']*\';/', '$auditFinalCtaBgUrl = \'' . $hero . '\';', $block, 1);

    $outPath = $root . '/' . $sections[$i]['dir'] . '/_bundle-audit-vars.php';
    $header = "<?php\ndeclare(strict_types=1);\n\n// Generated from service_pages_all.php (see scripts/gen-service-bundles-from-service-pages-all.php).\n\n";
    if (file_put_contents($outPath, $header . $block) === false) {
        fwrite(STDERR, "Failed write: {$outPath}\n");
        exit(1);
    }
    echo "Wrote {$outPath}\n";
}

// Patch aggregate file: fix wrong placeholder hero/cta image folders to match real site assets.
$agg = file_get_contents($srcPath);
if ($agg === false) {
    fwrite(STDERR, "Cannot re-read aggregate\n");
    exit(1);
}

foreach ($sections as $s) {
    $p = $s['prefix'];
    $hero = $s['hero'];
    $pattern = '/(\$' . preg_quote($p, '/') . 'FinalCtaBgUrl\s*=\s*)\'[^\']*\';/';
    $agg = preg_replace_callback(
        $pattern,
        static function (array $m) use ($hero): string {
            return $m[1] . "'" . $hero . "';";
        },
        $agg,
        1
    );
}

// serviceCoverHeroBgUrl appears once per section, in the same order as $sections.
$heroIdx = 0;
$agg = preg_replace_callback(
    '/\$serviceCoverHeroBgUrl\s*=\s*\'[^\']*\';/',
    static function () use ($sections, &$heroIdx): string {
        if (!isset($sections[$heroIdx])) {
            throw new RuntimeException('Too many $serviceCoverHeroBgUrl assignments for known sections');
        }
        $hero = $sections[$heroIdx]['hero'];
        $heroIdx++;
        return '$serviceCoverHeroBgUrl = \'' . $hero . '\';';
    },
    $agg
);

if ($heroIdx !== count($sections)) {
    fwrite(STDERR, 'Unexpected hero assignment count: ' . $heroIdx . ' vs ' . count($sections) . "\n");
    exit(1);
}

if (file_put_contents($srcPath, $agg) === false) {
    fwrite(STDERR, "Failed write aggregate\n");
    exit(1);
}

echo "Patched service_pages_all.php image URLs\n";
