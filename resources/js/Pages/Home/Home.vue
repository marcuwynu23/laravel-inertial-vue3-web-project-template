/*
 *   Copyright (c) 2023 
 *   All rights reserved.
 */
<script setup>
import Layout from '../../Layouts/Layout.vue';
import { Inertia } from "@inertiajs/inertia";

defineProps({
	accounts: Object
});
</script>
<template>
	<Layout>
		<a>Drop Previous Table</a>
		<div>
			<div class="table-container">
				<table class="table table-responsive">
					<thead>
						<th>#</th>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Last Name</th>
					</thead>
					<tbody>
						<tr v-for="item in accounts">
							<td>{{ item.id }}</td>
							<td>{{ item.first_name }}</td>
							<td>{{ item.middle_name }}</td>
							<td>{{ item.last_name }}</td>
						</tr>
					</tbody>
				</table>
			</div>


			<form method="post">
				<div class="form-group">
					<label for="first_name">First Name</label>
					<input type="text"
						class="form-control"
						name="first_name"
						id="first_name">
				</div>
				<div class="form-group">
					<label for="middle_name">Middle Name</label>
					<input type="text"
						class="form-control"
						name="middle_name"
						id="middle_name">
				</div>
				<div class="form-group">
					<label for="last_name">Last Name</label>
					<input type="text"
						class="form-control"
						name="last_name"
						id="last_name">
				</div>
				<button type="submit"
					class="btn btn-primary">Submit</button>
			</form>

		</div>
	</Layout>
</template>