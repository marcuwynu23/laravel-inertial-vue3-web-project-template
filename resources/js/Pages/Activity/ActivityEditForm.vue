/*
 *   Copyright (c) 2023 
 *   All rights reserved.
 */

<script setup>

import { Inertia } from '@inertiajs/inertia';
import { useForm } from '@inertiajs/inertia-vue3';
import Layout from '../../Layouts/Layout.vue';

const props = defineProps({
	data: {
		type: Object,
		default: () => { }
	}
});





const form = useForm({
	date: props.data.date,
	time: props.data.time,
	accomplishment: props.data.accomplishment,
	remarks: props.data.remarks
});

const update = () => {
	form.patch(route('activity.update', props.data.id));
}
</script>


<template>
	<Layout>
		<h1> Edit Activity Form</h1>
		<section>
			<div class="activity-form-container">
				<form @submit.prevent="update">
					<div class="form-group">
						<label for="date">Date</label>
						<input type="date"
							class="form-control"
							v-model="form.date">
					</div>
					<div class="form-group">
						<label for="time">Time</label>
						<input type="time"
							class="form-control"
							v-model="form.time">
					</div>
					<div class="form-group">
						<label for="accomplishment">Accomplishment</label>
						<input type="text"
							class="form-control"
							v-model="form.accomplishment">
					</div>
					<div class="form-group">
						<label for="remarks">Remarks</label>
						<input type="text"
							class="form-control"
							v-model="form.remarks">
					</div>
					<br>
					<button type="submit"
						class="btn btn-secondary px-2 m-1">Update</button>
				</form>
			</div>
		</section>
	</Layout>
</template>


