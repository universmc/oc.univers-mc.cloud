# Makefile for building a GPT Codex prompting plugin

# Compiler and compiler flags (adjust these according to your project)
CC := gcc
CFLAGS := -std=c99 -Wall

# Directories
SRC_DIR := src
BUILD_DIR := build

# Output binary name
PLUGIN_NAME := my_codex_plugin

# Source files
SRCS := $(wildcard $(SRC_DIR)/*.c)

# Object files
OBJS := $(patsubst $(SRC_DIR)/%.c, $(BUILD_DIR)/%.o, $(SRCS))

# Build target
$(BUILD_DIR)/$(PLUGIN_NAME): $(OBJS)
    $(CC) $(CFLAGS) -o $@ $(OBJS) $(LDFLAGS)

# Compilation rules
$(BUILD_DIR)/%.o: $(SRC_DIR)/%.c
    $(CC) $(CFLAGS) -c $< -o $@

# Clean
clean:
	@rm -f $(BUILD_DIR)/*.o $(BUILD_DIR)/$(PLUGIN_NAME)

# Phony target to ensure 'clean' is not treated as a file
.PHONY: clean