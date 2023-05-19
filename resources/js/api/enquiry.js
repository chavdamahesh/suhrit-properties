import request from '@/utils/request';
import Resource from '@/api/resource';

class EnquiryResource extends Resource {
  constructor() {
    super('enquiries');
  }
}

export { EnquiryResource as default };

export function fetchList(query) {
  return request({
    url: '/enquiries',
    method: 'get',
    params: query,
  });
}

export function fetchEnquiry(id) {
  return request({
    url: '/enquiries/' + id + '/edit',
    method: 'get',
  });
}

export function createEnquiry(data) {
  return request({
    url: '/enquiries/create',
    method: 'post',
    data,
  });
}

export function updateEnquiry(id, data) {
  return request({
    url: '/enquiries/' + id + '/update',
    method: 'post',
    data,
  });
}

export function deleteEnquiry(id) {
  return request({
    url: '/enquiries/' + id + '/delete',
    method: 'get',
  });
}

export function getAllEnquiries(id) {
  return request({
    url: '/enquiries/list',
    method: 'get',
  });
}
