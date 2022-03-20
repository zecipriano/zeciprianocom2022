module.exports = {
    purge: [
        'source/**/*.blade.php',
        'source/**/*.md',
        'source/**/*.html',
    ],
    darkMode: 'media',
    theme: {
        fontFamily: {
            'sans': ['Inter', 'Arial', 'sans-serif']
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'primary': '#d10007',
            'gray': {
                50: '#fafafa',
                900: '#292929'
            }
        },
        extend: {
            gridTemplateColumns: {
                'golden': '1fr 1.618fr',
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
