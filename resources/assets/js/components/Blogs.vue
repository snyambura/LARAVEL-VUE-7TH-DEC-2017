<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="pull-left">
                    <h2>Blogs </h2>
                </div>
            </div>
        </div>

        <div v-for="blog in blogs" class="well well-lg">
            <h4>{{blog.title}}</h4>
            <p> {{blog.content}}</p>


        </div>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                blogs: []
            }
        },

        mounted()
        {
            this.displayBlogs();
        },

        methods: {

            displayBlogs() {
                axios.get('api/blogs').then((response) => {
                    console.log(response.data);
                    this.blogs = response.data;
                })

            }
        }
    }
</script>

