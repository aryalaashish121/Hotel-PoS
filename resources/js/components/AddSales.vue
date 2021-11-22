<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Test</div>

          <div class="card-body">
            <tr v-for="count in row_count" :key="count">
              <input type="text" name="name" />
            </tr>
            <button type="add" @click="addRow">add</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      row_count: null,
    };
  },

  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    addRow() {
      const self = this;

      if (self.row_count < 5) {
        self.row_count = self.row_count + 1;
      }
    },
  },
};
</script>
