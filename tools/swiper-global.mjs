/**
 * Только Navigation + Pagination — остальное из swiper-bundle не используется на сайте.
 * Сборка: npm run build:swiper
 */
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

Swiper.use([Navigation, Pagination]);
window.Swiper = Swiper;
