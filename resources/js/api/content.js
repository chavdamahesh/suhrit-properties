import request from '@/utils/request';

export function fetchList(query) {
  return request({
    url: '/content',
    method: 'get',
    params: query,
  });
}

export function fetchContent(id) {
  return request({
    url: '/content/' + id,
    method: 'get',
  });
}

export function createContent(data) {
  return request({
    url: '/content/create',
    method: 'post',
    data,
  });
}

export function updateContent(id, data) {
  return request({
    url: '/content/' + id + '/update',
    method: 'post',
    data,
  });
}
