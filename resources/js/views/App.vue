<template>
	<div>
		<router-link tag="a" :to="{ name: 'home'}">Home</router-link>
		<router-link tag="a" :to="{ name: 'about'}">About</router-link>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>ROUTER-VIEW</h1>
					<transition name="page" mode="out-in">
						<router-view></router-view>
					</transition>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {};
</script>