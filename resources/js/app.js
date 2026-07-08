import './bootstrap';
import { createIcons, icons } from "lucide";

createIcons({ icons });

import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    duration: 800,
    once: true,
    offset: 100,
    easing: 'ease-in-out',
});