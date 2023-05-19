/** When your routing table is too long, you can split it into small modules**/
import Layout from '@/layout';

const adminRoutes = {
  path: '/administrator',
  component: Layout,
  redirect: '/administrator/users',
  name: 'Administrator',
  alwaysShow: true,
  meta: {
    title: 'administrator',
    icon: 'admin',
    permissions: ['view menu administrator'],
  },
  children: [
    /** User managements */
    {
      path: 'users/edit/:id(\\d+)',
      component: () => import('@/views/users/UserProfile'),
      name: 'UserProfile',
      meta: { title: 'userProfile', permissions: ['manage user'], noCache: true },
      hidden: true,
    },
    {
      path: 'users',
      component: () => import('@/views/users/List'),
      name: 'UserList',
      meta: { title: 'users', icon: 'user', permissions: ['manage user'], noCache: true },
    },
    /** Role and permission */
    {
      path: 'roles',
      component: () => import('@/views/role-permission/List'),
      name: 'RoleList',
      meta: { title: 'rolePermission', icon: 'role', permissions: ['manage permission'], noCache: true },
    },
    {
      path: 'translations',
      component: () => import('@/views/content/List'),
      name: 'Translations',
      meta: { title: 'Translations', icon: 'nested', permissions: ['manage user'], noCache: true },
    },
    {
      path: 'content/create',
      component: () => import('@/views/content/Create'),
      name: 'CreateContent',
      meta: { title: 'Create Content', icon: 'edit', permissions: ['manage article'], noCache: true },
      hidden: true,
    },
    {
      path: 'content/edit/:id(\\d+)',
      component: () => import('@/views/content/Edit'),
      name: 'EditContent',
      meta: { title: 'Edit Content', noCache: true, permissions: ['manage article'] },
      hidden: true,
    },
  ],
};
export default adminRoutes;
