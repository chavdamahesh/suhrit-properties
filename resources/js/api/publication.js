import request from '@/utils/request';

export function fetchList(query) {
  return request({
    url: '/publications',
    method: 'get',
    params: query,
  });
}

export function fetchPublication(id) {
  return request({
    url: '/publication/' + id,
    method: 'get',
  });
}

export function createArticle(data) {
  return request({
    url: '/publication/create',
    method: 'post',
    data,
  });
}

export function updatePublication(id, data) {
  return request({
    url: '/publication/' + id + '/update',
    method: 'post',
    data,
  });
}
