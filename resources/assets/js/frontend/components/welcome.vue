<template>
    <div class="jumbotron jumbotron-unicorn">
        <div class="text-center">
            <h1>{{ message }}</h1>
        </div>
    </div>
</template>
<script>
    export default{
        props: ['message']
    }
</script>