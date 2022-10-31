/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    
			'header.php',
      'index.php',
      'footer.php',
      'page.php',
      'sidebar.php',
      'template-parts/pages.php',	
      'page-inicio.php'
			
		],

  theme: {
    extend: {
      fontFamily: {
        
        'Montserrat': ['Montserrat', 'sans-serif', "Helvetica Neue", "Helvetica CY", "Nimbus Sans L"],
        'Poppins': ['Poppins', 'sans-serif'],
        'openSans': ['Open Sans', 'sans-serif'],
        'notosans': ['Noto Sans', 'sans-serif'],
        'BebasNeue': ['Bebas Neue', 'cursive'],
        'sans': ['Raleway', 'Arial', 'sans-serif'],
      }
    },
  },
  plugins: [],
}
