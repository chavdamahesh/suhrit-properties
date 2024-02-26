import request from '@/utils/request';

export function fetchList(query) {
  return request({
    url: '/properties',
    method: 'get',
    params: query,
  });
}

export function fetchProperty(id) {
  return request({
    url: '/property/' + id + '/edit',
    method: 'get',
  });
}

export function createProperty(data) {
  return request({
    url: '/property/create',
    method: 'post',
    data,
    timeout: 60000,
  });
}

export function updateProperty(id, data) {
  return request({
    url: '/property/' + id + '/update',
    method: 'post',
    data,
    timeout: 60000,
  });
}

export function updatePropertyStatus(id, data) {
  return request({
    url: '/property/' + id + '/update-status',
    method: 'post',
    data,
    timeout: 60000,
  });
}

