module.exports = {
  content: [
    "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
      keyframes: {
        'fade-in-up': {
            '0%': {
                opacity: '0',
                transform: 'translateY(-10px)'
            },
            '100%': {
                opacity: '1',
                transform: 'translateY(0)'
            },
        },
        'fade-in-left': {
          '0%': {
              opacity: '0',
              transform: 'translateX(-20px)'
          },
          '100%': {
              opacity: '1',
              transform: 'translateX(0)'
          },
      }
    },
    animation: {
        'fade-in-up': 'fade-in-up 0.5s ease-out',
        'fade-in-left': 'fade-in-left 0.5s ease-out'
    },
      colors: {
        'red-226': '#e20000',
        'black-17': '#111111',
        'gray-244' : '#F4F4F4',
        
      },
    },
  },
  plugins: [],
}