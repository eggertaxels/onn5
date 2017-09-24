# coding=UTF-8              ATH: Nota þessa línu ef komment eiga að vera á íslensku!!!
from verk1aClasses import *

# Leikurinn samanstendur af 5 tenginum
dt = DiceThrower()
# og blaði(sheet) sem fyllt er á(hérna er það frumstillt með -1)
sheet = [-1,-1,-1,-1,-1]

# í upphafi er spurt hvort spila skuli leik eða hætta við.
game_is_on = main_menu()

while game_is_on:.
    for i in range(0,5):
        dice = dice_menu(dt)

        sheet_menu(dice,sheet)

    print 'Final Score',sum(sheet)

    game_is_on = main_menu()

print 'The End!'