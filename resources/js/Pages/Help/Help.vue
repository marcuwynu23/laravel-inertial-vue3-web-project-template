/*
*   Copyright (c) 2023 
*   All rights reserved.
*/

<script setup>
import { Inertia } from "@inertiajs/inertia";
import Layout from "../../Layouts/Layout.vue";


//  defineProps({
// 	 accounts: Object
//  });
</script>

<template>
	<Layout>
		<div class="container">
			<h1 class="text-center mt-5">Welcome to our Daily Log of Activities</h1>

			<p class="text-center mt-3">We're here to help you with any questions or issues you may have. Below are some of
				the most common topics our customers ask about.</p>

			<div class="accordion mt-5"
				id="helpAccordion">
				<div class="card">
					<div class="card-header"
						id="gettingStarted">
						<h2 class="mb-0">
							<button class="btn btn-link"
								type="button"
								data-toggle="collapse"
								data-target="#collapseOne"
								aria-expanded="true"
								aria-controls="collapseOne">
								Getting Started
							</button>
						</h2>
					</div>

					<div id="collapseOne"
						class="collapse show"
						aria-labelledby="gettingStarted"
						data-parent="#helpAccordion">
						<div class="card-body">
							<ul>
								<li>How to create a daily log entry</li>
								<li>How to view your daily log history</li>
								<li>How to edit or delete a log entry</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header"
						id="addingEntries">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed"
								type="button"
								data-toggle="collapse"
								data-target="#collapseTwo"
								aria-expanded="false"
								aria-controls="collapseTwo">
								Adding Entries
							</button>
						</h2>
					</div>
					<div id="collapseTwo"
						class="collapse"
						aria-labelledby="addingEntries"
						data-parent="#helpAccordion">
						<div class="card-body">
							<ul>
								<li>How to add a date and time for a log entry</li>
								<li>How to add accomplished tasks and remarks</li>
								<li>How to add attachments to a log entry</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</Layout>
</template>