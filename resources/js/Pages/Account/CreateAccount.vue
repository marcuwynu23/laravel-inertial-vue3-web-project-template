/*
 *   Copyright (c) 2023 
 *   All rights reserved.
 */

<script setup>
import { Inertia } from '@inertiajs/inertia';
import { useForm } from '@inertiajs/inertia-vue3';


const form = useForm({
	first_name: "",
	middle_name: "",
	last_name: "",
	username: "",
	email: "",
	password: "",

})
</script>
<template>
	<h1 class="display-5 fw-bold">Create Account</h1>
	<form>
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

		<button type="submit"
			class="btn btn-primary">Submit</button>
	</form>

</template>