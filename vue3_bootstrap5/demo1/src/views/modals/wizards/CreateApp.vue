<template>
  <KTModalCard
    title="Create App Modal Example"
    description="Click on the below buttons to launch <br/>create app modal example."
    image="media/illustrations/work.png"
    button-text="Create App"
    modal-id="kt_modal_create_app"
  ></KTModalCard>
</template>

<script lang="ts">
import { defineComponent, onMounted } from "vue";
import KTModalCard from "@/views/modals/Card.vue";
import { setCurrentPageBreadcrumbs } from "@/core/helpers/breadcrumb";

export default defineComponent({
  name: "create-app",
  components: {
    KTModalCard
  },
  setup() {
    onMounted(() => {
      setCurrentPageBreadcrumbs("Create App", ["Modals", "Wizards"]);
    });
  }
});
</script>
