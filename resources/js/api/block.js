import request from '@/utils/request';

export function fetchList(query) {
  return request({
    url: '/blocks',
    method: 'get',
    params: query,
  });
}

export function fetchBlock(id) {
  return request({
    url: '/block/' + id,
    method: 'get',
  });
}

export function fetchPv(id) {
  return request({
    url: '/block/' + id + '/pageviews',
    method: 'get',
  });
}

export function createBlock(data) {
  return request({
    url: '/block/create',
    method: 'post',
    data,
  });
}

export function updateBlock(id, data) {
  return request({
    url: '/block/' + id + '/update',
    method: 'post',
    data,
  });
}
