const slider = document.getElementById('slider');
const startElement = document.getElementById('start');
const endElement = document.getElementById('end');
const min = Number(startElement.textContent);
const max = Number(endElement.textContent);


noUiSlider.create(slider, {
    start: [min, max],
    connect: true,
    range: {
        'min': min,
        'max': max
    },
    step: 1
});

slider.noUiSlider.on('update', function(){
    const [start, end] = slider.noUiSlider.get();
    startElement.textContent = Math.floor(start);
    endElement.textContent = Math.floor(end);
});