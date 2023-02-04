/*
 *   Copyright (c) 2023 
 *   All rights reserved.
 */

<script setup>
import Layout from "../../Layouts/Layout.vue";
import { Link, useForm } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";

defineProps({
	activities: Object
})
const form = useForm();

function deleteData(id) {
	form.delete(route('activity.destroy', id));
}
</script>





<template>
	<Layout>
		<h1 class="display-7 fw-bold">
			<i class="fas fa-biking"></i>
			Activities
		</h1>
		<section>
			<div class="activity-log-container">
				<table class="table table-responsive">
					<thead class="thead-light">
						<tr>
							<th>#</th>
							<th>Date</th>
							<th>Time</th>
							<th>Accomplishment</th>
							<th>Remarks</th>
							<th>Option</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="activity in activities">
							<td>{{ activity.id }}</td>
							<td>{{ activity.date }}</td>
							<td>{{ activity.time }}</td>
							<td>{{ activity.accomplishment }}</td>
							<td>{{ activity.remarks }}</td>
							<td>
								<div>
									<form @submit.prevent="deleteData(activity.id)">
										<Link :href="route('activity.edit', activity.id)"
											class="btn btn-sm btn-warning m-2">Edit</Link>
										<button class="btn btn-sm btn-danger m-2">Delete</button>
									</form>
								</div>
							</td>
						</tr>
					</tbody>
				</table>

			</div>
		</section>
	</Layout>
</template>




