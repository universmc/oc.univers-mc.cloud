import curses

def draw_menu(stdscr):
    k = 0
    cursor_x = 0
    cursor_y = 0

    stdscr.clear()
    stdscr.refresh()

    height, width = stdscr.getmaxyx()

    while k != ord('q'):
        stdscr.clear()

        if k == ord('1'):
            # Affichage de la section NLP & Machine Learning
            stdscr.addstr(int(height/4) - 2, int(width/4), "PRÉSENTATION NLP & MACHINE LEARNING", curses.A_BOLD)
            stdscr.addstr(int(height/4), int(width/4), "Le NLP (Natural Language Processing) est")
            stdscr.addstr(int(height/4) + 1, int(width/4), "une branche de l'IA qui se focalise sur")
            stdscr.addstr(int(height/4) + 2, int(width/4), "la compréhension et l'interprétation du")
            stdscr.addstr(int(height/4) + 3, int(width/4), "langage humain par les machines.")
            stdscr.addstr(int(height/4) + 5, int(width/4), "Le Machine Learning est une méthode")
            stdscr.addstr(int(height/4) + 6, int(width/4), "utilisée pour enseigner aux machines")
            stdscr.addstr(int(height/4) + 7, int(width/4), "comment apprendre à partir de données.")
            stdscr.addstr(int(height/4) + 9, int(width/4), "[Retourner au Menu Principal]")
        elif k == ord('2'):
            stdscr.addstr(int(height/2), int(width/2) - 7, "Section Cours")
        elif k == ord('3'):
            stdscr.addstr(int(height/2), int(width/2) - 8, "Section Projets")
        else:
            stdscr.addstr(int(height/2) - 2, int(width/2) - 8, "OC.MC UNIVERS", curses.A_BOLD)
            stdscr.addstr(int(height/2), int(width/2) - 7, "1. Présentation NLP & ML")
            stdscr.addstr(int(height/2) + 1, int(width/2) - 7, "2. Cours")
            stdscr.addstr(int(height/2) + 2, int(width/2) - 8, "3. Projets")
            stdscr.addstr(int(height/2) + 3, int(width/2) - 7, "4. Quitter")

        stdscr.refresh()

        k = stdscr.getch()

curses.wrapper(draw_menu)
