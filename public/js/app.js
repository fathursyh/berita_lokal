function previewImage() {
  const image = document.getElementById('image');
  const imgPreview = document.querySelector('.img-preview');

  imgPreview.style.display = 'block';
  const ofReader = new FileReader();
  ofReader.readAsDataURL(image.files[0]);
  ofReader.onload = (oFREvent) => {
    imgPreview.src = oFREvent.target.result;
  };
}

function clearImage() {
  const image = document.getElementById('image');
  const imgPreview = document.querySelector('.img-preview');

  image.value = ''
  imgPreview.src = ''
}