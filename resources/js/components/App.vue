<template>
    <div id="app">
        <chat-log></chat-log>
        <chat-composer></chat-composer>
    </div>
</template>

<script>
    export default {
        name : "app",
        component : ["ChatComposer"],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
