import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    darkMode: 'class',

    theme: {
        extend: {
            fontFamily: {
                sans: ['"Nunito Sans"', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                surface: {
                    DEFAULT: '#121411',
                    dim: '#121411',
                    bright: '#383a36',
                    variant: '#333532',
                },
                'surface-container': {
                    lowest: '#0d0f0c',
                    low: '#1a1c19',
                    DEFAULT: '#1e201d',
                    high: '#292b27',
                    highest: '#333532',
                },
                'on-surface': {
                    DEFAULT: '#e3e3de',
                    variant: '#c2c9bb',
                },
                'inverse-surface': '#e3e3de',
                'inverse-on-surface': '#2f312e',
                outline: {
                    DEFAULT: '#8c9387',
                    variant: '#42493e',
                },
                'surface-tint': '#a1d494',
                primary: {
                    DEFAULT: '#a1d494',
                    light: '#bcf0ae',
                    dim: '#a1d494',
                    container: '#2d5a27',
                    fixed: '#bcf0ae',
                    'fixed-dim': '#a1d494',
                },
                'on-primary': {
                    DEFAULT: '#0a3909',
                    container: '#9dd090',
                    fixed: '#002201',
                    'fixed-variant': '#23501e',
                },
                'inverse-primary': '#3b6934',
                secondary: {
                    DEFAULT: '#ffb59e',
                    container: '#7d3117',
                    fixed: '#ffdbd0',
                    'fixed-dim': '#ffb59e',
                },
                'on-secondary': {
                    DEFAULT: '#5c1902',
                    container: '#ffa082',
                    fixed: '#390b00',
                    'fixed-variant': '#7a2f15',
                },
                tertiary: {
                    DEFAULT: '#cac6be',
                    container: '#525049',
                    fixed: '#e7e2d9',
                    'fixed-dim': '#cac6be',
                },
                'on-tertiary': {
                    DEFAULT: '#32302a',
                    container: '#c6c2ba',
                    fixed: '#1d1c16',
                    'fixed-variant': '#494740',
                },
                error: {
                    DEFAULT: '#ffb4ab',
                    container: '#93000a',
                },
                'on-error': {
                    DEFAULT: '#690005',
                    container: '#ffdad6',
                },
                background: '#121411',
                'on-background': '#e3e3de',
            },
            fontSize: {
                'display-lg': ['48px', { lineHeight: '56px', fontWeight: '800', letterSpacing: '-0.02em' }],
                'headline-lg': ['32px', { lineHeight: '40px', fontWeight: '700' }],
                'headline-lg-mobile': ['28px', { lineHeight: '36px', fontWeight: '700' }],
                'headline-md': ['24px', { lineHeight: '32px', fontWeight: '600' }],
                'body-lg': ['18px', { lineHeight: '28px', fontWeight: '400' }],
                'body-md': ['16px', { lineHeight: '24px', fontWeight: '400' }],
                'label-md': ['14px', { lineHeight: '20px', fontWeight: '600', letterSpacing: '0.01em' }],
                'label-sm': ['12px', { lineHeight: '16px', fontWeight: '700', letterSpacing: '0.03em' }],
            },
            borderRadius: {
                'sc-sm': '0.25rem',
                'sc': '0.5rem',
                'sc-md': '0.75rem',
                'sc-lg': '1rem',
                'sc-xl': '1.5rem',
                'sc-full': '9999px',
            },
            spacing: {
                'sc-xs': '4px',
                'sc-base': '8px',
                'sc-sm': '12px',
                'sc-md': '24px',
                'sc-lg': '48px',
                'sc-xl': '80px',
                'sc-gutter': '24px',
                'sc-margin-mobile': '16px',
                'sc-margin-desktop': '40px',
            },
            maxWidth: {
                'sc-container': '1280px',
            },
            boxShadow: {
                'bloom': '0 0 20px 2px rgba(45, 90, 39, 0.15)',
                'bloom-lg': '0 0 40px 4px rgba(45, 90, 39, 0.20)',
                'bloom-secondary': '0 0 20px 2px rgba(255, 181, 158, 0.10)',
            },
            animation: {
                'fade-in': 'fadeIn 0.6s ease-out forwards',
                'slide-up': 'slideUp 0.6s ease-out forwards',
                'slide-in-left': 'slideInLeft 0.5s ease-out forwards',
                'scale-in': 'scaleIn 0.4s ease-out forwards',
                'glow-pulse': 'glowPulse 3s ease-in-out infinite',
            },
            keyframes: {
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                slideUp: {
                    '0%': { opacity: '0', transform: 'translateY(20px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                slideInLeft: {
                    '0%': { opacity: '0', transform: 'translateX(-20px)' },
                    '100%': { opacity: '1', transform: 'translateX(0)' },
                },
                scaleIn: {
                    '0%': { opacity: '0', transform: 'scale(0.95)' },
                    '100%': { opacity: '1', transform: 'scale(1)' },
                },
                glowPulse: {
                    '0%, 100%': { boxShadow: '0 0 20px 2px rgba(45, 90, 39, 0.12)' },
                    '50%': { boxShadow: '0 0 30px 6px rgba(45, 90, 39, 0.20)' },
                },
            },
        },
    },

    plugins: [forms],
};
