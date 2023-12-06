# Ajoutez ceci à votre Makefile
generate_semantic_page:
    @cp -r exercises/exercise_semantic_page/* build/pages/cours/exercise_semantic_page
    @echo "Generated semantic page exercise"

# ...
copy_components:
    cat src/components/header.html > src/pages/semantic_page.html
    cat src/components/main.html >> src/pages/semantic_page.html
    cat src/components/footer.html >> src/pages/semantic_page.html
    @echo "Copied components to semantic_page.html"

# ...

.PHONY: copy_components

# ...


.PHONY: generate_semantic_page