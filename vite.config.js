import { defineConfig } from 'vite';
import path from 'path';


export default defineConfig({
    root: './',
    build: {
        manifest: true,
        outDir: 'public/build',
        rollupOptions: {
            input: path.resolve('./resources/'), // Adjust the entry point as needed
        },
    },
});
