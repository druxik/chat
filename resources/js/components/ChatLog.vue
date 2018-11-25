<template>
    <div class="chat-log">
        <chat-message v-for="(message, index) in messages" :message="message" :key="index"></chat-message>
        <div class="empty" v-show="messages.length === 0">
            Nothing
        </div>
    </div>
</template>

<script>
    export default {
        name : "ChatLog",
        props : ['messages'],
    }
</script>

<style scoped>
    .chat-log .chat-message:nth-child(even)
    {
        background-color: #ccc;
    }
    .empty
    {
        padding: 1rem;
        text-align: center;
    }
</style>