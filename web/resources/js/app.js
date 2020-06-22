import Vue from 'vue'
// ルーティングの定義をインポートする
import router from './router'
// ストアをインポートする
import store from './store' // add
// ルートコンポーネントをインポートする
import App from './App.vue'
// ブートストラップをインポートする
import './bootstrap'

const createApp = async () => {
  await store.dispatch('auth/currentUser')

  new Vue({
    el: '#app',
    router,
    store,
    components: { App },
    template: '<App />'
  })
}

createApp()