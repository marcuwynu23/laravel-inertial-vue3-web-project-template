/*
 *   Copyright (c) 2023 
 *   All rights reserved.
 */
<script setup>
import { Inertia } from '@inertiajs/inertia';
import NavigationBar from '../Layouts/NavigationBar.vue';
</script>



<template>
	<header>

		<NavigationBar />
	</header>
	<main>
		<div class="container card mt-3 p-3">
			<slot />
		</div>
	</main>
	<footer>
	</footer>
</template>


