<template>
    <div class="box is-info">
       <p>
           <slot></slot>
       </p>
    </div>
</template>

<script>
export default {
    
}
</script>

<style lang="">
    .box{
        background: gray;
        padding: 10px;
        border: 1px solid green;
    }
</style>