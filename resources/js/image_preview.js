const placeholder = 'https://media.istockphoto.com/id/1147544807/vector/thumbnail-image-vector-graphic.jpg?s=612x612&w=0&k=20&c=rnCKVbdxqkjlcs3xH87-9gocETqpspHFXu5dIGB4wuM=';
const imageField = document.getElementById('image');
const previewField = document.getElementById('preview');

let blobUrl;

imageField.addEventListener('change', () => {

    // Check if I had a file
    if (imageField.files && imageField.files[0]) {
        // Take file
        const file = imageField.files[0];

        // Temporary URL
        blobUrl = URL.createObjectURL(file);

        // Insert into src
        previewField.src = blobUrl;
    } else {
        previewField.src = placeholder;
    }
})

window.addEventListener('beforeunload', () => {
    if (blobUrl) URL.revokeObjectURL(blobUrl);
})