<template>
    <div>
        <nav class="navbar bg-white border-bottom navbar-light bg-light">
            <router-link class="navbar-brand mr-auto" v-bind:to="{name: 'home'}">Home</router-link>
            <router-link class="btn nav-button" v-bind:to="{name: 'second'}">second</router-link>
        </nav>
        <div class="container mt-4 pr-4 pl-4">
            <router-view></router-view>
        </div>
    </div>
</template>
