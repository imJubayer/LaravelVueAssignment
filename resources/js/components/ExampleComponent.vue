<template>
  <div class="container">
    <!-- <ul v-for="post in posts" v-bind:key="post.id">
      <li>{{ post.title }}</li>
      <p>{{ post.body }}</p>
    </ul> -->
    <div>
        <!-- <button class="btn btn-primary" v-on:click="getData">Get Data</button> -->
        <button class="btn btn-primary" v-on:click="getUser">Fetch</button>
        <!-- <button class="btn btn-primary" v-on:click="postUser">Post User</button> -->
        <div v-for="post in posts" v-bind:key="post._id">
            <!-- <h2>{{ post.name }}</h2>
            <p>{{ post.email }}</p> -->
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ post.name }}
                    <div>

                    <button class="btn btn-primary" data-bs-toggle="modal" :data-bs-target="'#exampleModal'+post._id">Info</button>
                    <button class="btn btn-danger" @click="del(post._id)">Delete</button>
                    </div>
                </li>
            </ul>

                <!-- Modal -->
                <div class="modal fade" :id="'exampleModal'+ post._id" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">{{post._id}}</th>
                                    <td>{{post.email}}</td>
                                    <td>{{post.gender}}</td>
                                    <td>{{post.name}}</td>
                                    <td>{{post.status}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
  </div>
</template>

<script>
    window.Vue = require('vue').default;
    export default {
        data() {
            return {
                posts: [],
            };
        },
        mounted() {
            // console.log(posts);
        },
        methods: {
            async getData() {
                try {
                    const response = await this.$http.get(
                        "http://127.0.0.1:8000/api/api-user"
                    );
                    // JSON responses are automatically parsed.
                    this.posts = response.data;
                    // console.log(this.posts);
                } catch (error) {
                    console.log(error);
                }
            },
            async getUser() {
                try {
                    const response = await this.$http.get(
                        "https://gorest.co.in/public/v1/users"
                    );
                    // JSON responses are automatically parsed.
                    // this.posts = response.data.data;
                    this.postUser(response.data.data);
                } catch (error) {
                    console.log(error);
                }
            },
            async postUser(data) {
                const token = '33be5059cfb02e82451d3c850e1ca48e8a12ee6727ad51fc7a7d2b680eb0d15d'
                // const url = `https://gorest.co.in/public/v1/users`
                const url = `http://127.0.0.1:8000/api/api-user`
                const config = {
                    headers: { Authorization: `Bearer ${token}` }
                };

                const response = await axios.post(url,
                    data,
                    config
                )
                .then(function (response) {
                        // console.log(response);
                        location.reload();
                    })
                    .catch(function (error) {
                        console.log(data);
                    });
            },
            async del(id) {
                const token = '33be5059cfb02e82451d3c850e1ca48e8a12ee6727ad51fc7a7d2b680eb0d15d'
                const url = `http://127.0.0.1:8000/api/api-user/${id}`
                const response = await axios.put(url, {
                    headers: {
                        Authorization: `Bearer ${token}`
                    }
                })
                .then(function (response) {
                        location.reload();
                    })
                    .catch(function (error) {
                        console.log(data);
                    });
            },
        },
        created() {
            this.getData();
        },
    };
</script>
