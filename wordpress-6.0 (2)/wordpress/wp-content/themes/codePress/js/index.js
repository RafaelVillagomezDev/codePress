const array_textos = [
  {
    id: 1,
    texto:
      'Canon EOS ( Electro-Optical System ) es una cámara réflex de lente única (SLR) con enfoque automático y una serie de cámaras sin espejo producidas por Canon Inc. Introducidas en 1987 con la Canon EOS 650 , todas las cámaras EOS usaban película de 35 mm hasta octubre de 1996 cuando la EOS IX se estrenó utilizando la nueva y efímera película APS . En 2000, se anunció la D30 , como la primera SLR digital diseñada y producida íntegramente por Canon. Desde 2005, todas las cámaras EOS recientemente anunciadas han utilizado sensores de imagen digital en lugar de película. La línea EOS todavía está en producción como la actual de Canon. la gama SLR digital (DSLR) y, con la presentación en 2012 de la EOS M de Canon, el sistema de cámara de lentes intercambiables sin espejo (MILC) de Canon. En 2018, el sistema se amplió aún más con la introducción de la cámara EOS R, el primer sistema de lentes intercambiables sin espejo de fotograma completo de Canon.',
  },
  {
    id: 2,
    texto:
      'La Sony ZV-1 se caracteriza por ese de tamaño muy compacto, y de peso muy ligero. Así que sin duda puede ser el dispositivo ideal para aquellos creadores que usan su smartphone para grabar, pero que necesitan más versatilidad y capacidades. En cuanto a sus dimensiones, la cámara tiene una dimensiones de 105.5 x 60 x 43.5 mm, y su peso con la batería y la tarjeta microSD es de 290 gramos. En realidad, la Sony ZV-1 cabe perfectamente hasta en el bolsillo del pantalón cuando está apagada, así que la podrás llevar a cualquier parte, sin requerir necesariamente de una mochila o bolso',
  },

  {
    id: 3,
    texto:
      'Libere su visión creativa con la D750: una cámara rápida, versátil y ágil. En un mundo en el que todo es posible, este portento de 24,3 megapíxeles de fotograma completo le ofrece la libertad que desea.Nada se le resiste a esta cámara, que está equipada con avanzada tecnología de imagen y optimizada para ser muy compacta.El nuevo sensor de formato FX proporciona una calidad de imagen excepcional con resultados más nítidos que nunca con sensibilidades ISO elevadas. Un rendimiento de AF de sensibilidad extraordinaria, una velocidad de ráfaga de hasta 6,5 fps y la opción de grabación de vídeo de máxima definición (Full HD) a 1080/60p se combinan con la pantalla abatible vertical para ofrecer una libertad de expresión total. Gracias a la conexión Wi-Fi integrada, es muy sencillo compartir en un instante impresionantes fotografías.',
  },
  {
    id: 4,
    texto:
      'En Fujifilm ya hace tiempo que decidieron ir a por todas con sus cámaras instantáneas Instax (e impresoras) debido a la buena acogida, con un mercado con cada vez más y más opciones. Hace algunas semanas dieron una vuelta de tuerca, más allá de nuevos diseños que básicamente hacen lo mismo, y presentaron la Fujifilm Instax Mini LiPlay con el curioso (e innovador) reclamo de poder añadir clips sonoros a las instantáneas tomadas e impresas. Una forma de ampliar la experiencia de tener copias instantáneas en papel con un extra diferente.',
  },
]
const boton = document.querySelectorAll('.btn_more')

boton.forEach((btn) =>
  btn.addEventListener('click', function (event) {
    const btnValue = event.target.value
    const text = document.querySelector('#text_c4')
    array_textos.map((texto) => {
      if (btnValue == texto.id) {
        text.innerHTML = texto.texto
      }
    })
  }),
)
