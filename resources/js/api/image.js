import request from '@/utils/request';

export function fetchImages(query) {
  return request({
    url: '/property/upload/get-images',
    method: 'get',
    params: query,
  });
}

export function deleteImage(model, id, image_id) {
  var data = { id: image_id };
  return request({
    url: '/property/upload/' + model + '/' + id + '/delete-image',
    method: 'post',
    data,
  });
}

export function createImage(data) {
  return request({
    url: '/property/upload/save-image',
    method: 'post',
    data,
  });
}

export function updateImageOrder(data) {
  console.log('111');
  return request({
    url: '/property/upload/save-image-order',
    method: 'post',
    data,
  });
}
