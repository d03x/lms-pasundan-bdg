import { DefineComponent } from "vue";
import Layout from "./layouts/layout.vue";

const define_layout = (layout : DefineComponent,name:string) => {
    layout.default.layout = Layout;
    return layout;
}

export default define_layout;