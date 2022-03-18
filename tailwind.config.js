module.exports = {
    purge: [
        'source/**/*.blade.php',
        'source/**/*.md',
        'source/**/*.html',
    ],
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
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
