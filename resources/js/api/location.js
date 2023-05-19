import Resource from '@/api/resource';

class LocationResource extends Resource {
  constructor() {
    super('locations');
  }
}

export { LocationResource as default };
