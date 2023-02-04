/*
 *   Copyright (c) 2023 
 *   All rights reserved.
 */

<script setup>
import { Link, useForm } from '@inertiajs/inertia-vue3';
import Layout from '../../Layouts/Layout.vue';

const props = defineProps({
	account: Object
})


// const form = useForm({
// 	first_name: props.account.first_name,
// 	middle_name: props.account.middle_name,
// 	last_name: props.account.last_name,
// 	username: props.account.username,
// 	email: props.account.email,
// 	password: props.account.password,
// })





const form = useForm({
	first_name: "props.account.first_name",
	middle_name: "props.account.middle_name",
	last_name: "props.account.last_name",
	username: "props.account.username",
	email: "props.account.email",
	password: "props.account.password",
})

</script>


<template>
	<Layout>
		<h1 class="display-5 fw-bold">Account</h1>
		<div>
			<div class="form-group">
				<label for="first_name">First Name:</label>
				<input type="text"
					class="form-control"
					id="first_name"
					name="first_name"
					v-model="form.first_name"
					required>
			</div>
			<div class="form-group">
				<label for="middle_name">Middle Name:</label>
				<input type="text"
					class="form-control"
					id="middle_name"
					name="middle_name"
					v-model="form.middle_name"
					required>
			</div>
			<div class="form-group">
				<label for="last_name">Last Name:</label>
				<input type="text"
					class="form-control"
					id="last_name"
					name="last_name"
					v-model="form.last_name"
					required>
			</div>
			<div class="form-group">
				<label for="username">Username:</label>
				<input type="text"
					class="form-control"
					id="username"
					name="username"
					v-model="form.username"
					required>
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email"
					class="form-control"
					id="email"
					name="email"
					v-model="form.email"
					required>
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password"
					class="form-control"
					id="password"
					name="password"
					v-model="form.password"
					required>
			</div>


			<Link :href="route('account.edit', 'id')"
				replace>Edit
			</Link>
		</div>
	</Layout>
</template>