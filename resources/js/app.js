/*
 *   Copyright (c) 2023 
 *   All rights reserved.
 */
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

createInertiaApp({
	resolve: name => require(`./Pages/${name}`),
	setup({ el, App, props, plugin }) {
		createApp({ render: () => h(App, props) })
			.use(plugin)
			.mixin({ methods: { route } })
			.mount(el)
	},
})