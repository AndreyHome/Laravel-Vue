import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

export default defineConfig({
  build: {
    emptyOutDir: false,
    manifest: true,
    reportCompressedSize: false,

    outDir: '../public',
    assetsDir: "assets",

    rollupOptions: {
      input: './src/main.js',
    },
  },
  server: {
    port: 8080,
  },
  plugins: [vue()]
})
