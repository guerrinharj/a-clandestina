console.log('marquee!')

const title = "This is the text of the marquee"

const marqueeText = new Array(50000).fill(title).join(" ")

const marquee = document.querySelector('#home-marquee span')

marquee.innerHTML = marqueeText
