import { resolve } from "path";
import { defineConfig } from "vite";
import legacy from "@vitejs/plugin-legacy";

export default defineConfig({
  plugins: [
    legacy({
      targets: ["defaults", "not IE 11"],
    }),
  ],
  build: {
    rollupOptions: {
      input: {
        main: resolve(__dirname, "index.html"),
        index2: resolve(__dirname, "index2.html"),
        kelas: resolve(__dirname, "kelas.html"),
        detail_kelas: resolve(__dirname, "detail-kelas.html"),
        list_mentor: resolve(__dirname, "list-mentor.html"),
        detail_mentor: resolve(__dirname, "detail-mentor.html"),
        alumni_stories: resolve(__dirname, "alumni-stories.html"),
        alumni_connect: resolve(__dirname, "alumni-connect.html"),
        testimoni_contributor: resolve(__dirname, "testimoni-contributor.html"),
        internship: resolve(__dirname, "internship.html"),
        contributor: resolve(__dirname, "contributor.html"),
        list_contributor: resolve(__dirname, "list_contributor.html"),
      },
    },
  },
});
