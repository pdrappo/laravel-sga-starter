<script>
import Navbar from '@/components/layout/navbar'
import Sidebar from '@/components/layout/sidebar'

export default {
  name: 'app',
  components: { Navbar, Sidebar }
}
</script>

<template>
    <div id="app">
        <div id="wrapper">
            <navbar/>
            <sidebar/>
        </div>
        <div id="page-wrapper">
          <router-view/>
        </div>
    </div>
</template>