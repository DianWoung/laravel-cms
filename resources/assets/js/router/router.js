
export default {
  mode: 'history',
  base: __dirname,
  routes: [
    {
      path: '/',
      redirect: '/example'    //重定向
    },
    {
      path: '/example',
      component: Example
    }
  ]
}
