import { onMounted, ref } from 'vue';

export const useRandomQuote = () => {
    const loading = ref(false);
    const quote = ref<{
        error : string,
        quote: string | null;
        author: string | null;
    }>({
        quote: null,
        author: null,
        error : ""
    });
    async function fetchQuote() {
        try {
            const response = await fetch('https://dummyjson.com/quotes/random');
            if (response.ok) {
                const data = await response.json();
                quote.value.quote = data.quote || null;
                quote.value.author = data.author || null;
            }
        } catch (error) {
            quote.value.error = "Ada Kesalahan saat request"
        }
    }
    onMounted(async () => {
        await fetchQuote();
    });
    return {quote}
};
