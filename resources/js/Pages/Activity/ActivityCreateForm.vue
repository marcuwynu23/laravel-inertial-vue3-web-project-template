/*
 *   Copyright (c) 2023 
 *   All rights reserved.
 */

<script setup>
import Layout from '../../Layouts/Layout.vue';
import { Inertia } from '@inertiajs/inertia';
import { useForm } from '@inertiajs/inertia-vue3';


const form = useForm({
	date: "",
	time: "",
	accomplishment: "",
	remarks: ""
});

function submit() {
	form.post(route('activity.store'));
}
</script>
<template>
	<Layout>
		<h1>Activity Form</h1>
		<section>
			<div class="activity-form-container">
				<form @submit.prevent="submit">
					<div class="form-group">
						<label for="date">Date</label>
						<input type="date"
							class="form-control"
							v-model="form.date"
							required="true">
					</div>
					<div class="form-group">
						<label for="time">Time</label>
						<input type="time"
							class="form-control"
							v-model="form.time"
							required="true">
					</div>
					<div class="form-group">
						<label for="accomplishment">Accomplishment</label>
						<input type="text"
							class="form-control"
							v-model="form.accomplishment"
							required="true">
					</div>
					<div class="form-group">
						<label for="remarks">Remarks</label>
						<input type="text"
							class="form-control"
							v-model="form.remarks">
					</div>
					<br>
					<button type="submit"
						class="btn btn-primary px-2 m-1">Submit</button>
				</form>
			</div>
		</section>
	</Layout>
</template>

