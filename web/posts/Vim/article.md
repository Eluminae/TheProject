
## The developer tools

A developer must have tools to transform efficiently his reflections to algorithms and automates. A developer who sticks to binary codes will create faster programs but will be attached to the simplest.

When I question collaborators about their core functionalities, they reply me almost the sames things.
- I want an efficient auto-completion
- I want go-to-definition system
- I want search in files tool
- I want compilation error reporting
- I want efficient files exploration tool

Everything of these are important. But ironically everything of theses functionalities are available from a simple terminal.

Now they question me what are my core functionalities. I reply them that my only core tool is a <strong>powerful text editor</strong>. Text editor is the number one. You'll type code, configurations, presentation, documentation, etc. Everything you'll do will start by writing something. Put down your thinkings, send e-mails.

Before speaking about my fetish text editor, I'd like to speak about the Unix philosophy.

## Unix philosophy

One of the most common opinion in open source is the Unix philosophy.

<em>"The Unix philosophy emphasizes building simple, short, clear, modular, and extensible code that can be easily maintained and repurposed by developers other than its creators. The Unix philosophy favors composability as opposed to monolithic design." </em>Wikipedia.

Another word I really like about this philosophy is <strong>KISS</strong> (Keep it simple, stupid).

The goals of this thinking by keeping tools separated and simple are multiples :
- <strong>Be able to switch them</strong> : Keep the possibility to use one or another tool. Be able to use one slinter based on NodeJS or the other based on a native language allow you to be flexible. In your computer you can use one, on your server the other. You probably don't use only one kitchen in your kitchen.
- <strong>Keep productivity</strong> : If you have one tool to do everything, you'll lose productivity. You'll have to wait your IDE before been able to continue the work. How many times I saw collaborators wait for PhpStorm to "index" files. When I think about "Universal-ctags" who process my projects, all languages in the same time, in just 2s, I just want to cry.
- <strong>Use the best</strong> : If you have to find and test different tools, you'll find the best on the domain. An example I can give you is 'Silversearch-ag'. This will tool you allow you to search string patterns in files. But he'll do this REALLY QUICKLY. A huge project, a thousand of code line, and the tool will give you the occurrences in less than a half second.
- <strong>Only keep what you need</strong> : Only keep pencils you use in your pencil case. You'll be lighter and gain speed.
- <strong>Understand your tools</strong> : Don't just press buttons without knowing what you do. If you have to search tools, you'll have to know what you need. You'll have to put a name on your them. How do you call your 'Ctrl + click' on your function name who will bring you to the definition ? How this tool works ? How your IDE can know where to bring you ?
- <strong>Be free</strong> : Simpliest, mono task and efficient tools are open source and free. This is not causality effect. This is not just correlation. But this is the reality. The thing is that this is a lot easier to a single man in his bedroom to maintain his tool if it's simple. Behind huge IDEs, there is company cause they need a lot of production capacity. The fact is that theses IDEs are not better, they just are tools compilation.

The Unix philosophy give you a lot of advantages. So how do we start ?

## Vim in center

When I open my Vim outside of my regular work place, I'm targeted like an alien. People think I'm hacking the NASA, people question me about my intention, people think they can't understand what I'm doing. Collaborators also question me about this strange thing. Why I stick with this ugly buttonless piece ? Why do not I use my mouse ? Mouse is faster in all way no ? How can I work without auto-completion (I do not but they don't see it).

So let's start from the beginning :
I use Vim cause it's the better text editor, by far away. But people have to understand that Vim <strong>doesn't have the ambition to do everything</strong>. It is not a git project manager. It is not a file manager. Vim <strong>want to be an efficient text editor</strong>. It provides a very solid base on which you can add the configurations that fits to you.

Vim <strong>does not lack of common functionalities</strong>. Vim got spell checking, auto-completion (from dictionary and from language based syntax), tags management (the 'Ctrl + click' to go to declaration).

Vim is long to take in hand. It has a really different approach of file editing. Vim use patterns that are easy to understand, to keep in mind and to automate. Vim is not just click somewhere in the window and press keys to add text. Vim is think of text modifications by <strong>actions</strong>. Go here. Delete until that. Replace this pattern by this one. Insert this group of words. Add ";" at the end of the line. Mhh, on the next one too. Ok also on the 6 next lines.

Vim questions the other approach patterns and makes the decision to do <strong>differently</strong>.
Tabs are anti pattern. We prefer buffers. We do not like visual distractions. We scroll files page by page. We don't use tree view to switch files. But I can promise you, you can do everything you have to better with Vim cause everything is <strong>thought to be efficient</strong>.

So what IDE got if Vim is so well thought ? IDE will save you early times. Over.
I'd like to remind you that this is useless to compare IDEs to Vim. Vim is a text editor and IDEs are lot of things. But we can compare the IDEs text editors to Vim. In term of text edition possibility : In which greatness does Vim overscale IDEs ?

## What Vim does that IDEs can't ?

- <strong>No need graphical interface</strong> : I saved my computers dying with Vim. When your graphical interface is dead, stay the terminal. You can also work on distant servers across ssh with Vim. You can work with your smartphone connected to your computer. Terminals is stable, terminals is light, terminals focus on report only useful information. I like terminals.
- <strong>Keep undo history just like forever</strong> : Go back in time, 5 minutes, 30 minutes, 5 hours, 5 months earlier. Vim can keep all changes in mind, also if you go back. It memorizes all changes with an action tree history. I think you can forget git on personals projects. Mhh, let's forget this idea...
- <strong>Automate every action</strong> : One single key can resume this power. The dot. Press dot and you re-execute the last action. It can be replacing a word by another. It can be adding missing ";" at the end of line. It can be uppercase a paragraph. And if there is more than one action to automate, here come the <strong>macros</strong>.
- <strong>Just don't be limited by your OS</strong> : One example is the Vim <strong>registries</strong>. A registry is like a clipboard on your OS. You can yank and paste from registries. In Vim, almost keyboard keys are unique registries. Why you should limit yourself to the 2 Linux clipboard ones ?
- <strong>Vimscript</strong> : Vim configurations are based on the vimscript. It's a <strong>language</strong> that allow modification of parameters, creation of functions, managment of event hooks, etc. Vimscript is available from inside Vim with ":" key but this power come to the well thought file config structure. There is a solid and consistent way to load configs, based on events, filetypes or autoloaded commands.
- <strong>Be what you want</strong> : There is so many possibilities to customize Vim. Add syntax handling, customize the way Vim will indent one filetype, change how it will auto-complete one sentence. There is just no limit. <strong>Plugins</strong> also give you large possibilities. The community behind Vim is huge and supportive. If you do not know how to do something, someone else will.
