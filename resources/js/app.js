import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { ZiggyVue } from 'ziggy-js';
import { initFlowbite } from 'flowbite';

createInertiaApp({
  title: title => `${title} - My App`,
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    const vueApp = createApp({ render: () => h(App, props) })
    vueApp.use(plugin)
    vueApp.use(ZiggyVue)
    vueApp.mixin({ mounted: () => initFlowbite() })
    vueApp.mount(el)
  },
})