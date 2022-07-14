<?php

namespace App\Command;

use App\Repository\UserRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class UserNameCommand extends Command
{
    protected static $defaultName = 'UserNameCommande';
    protected static $defaultDescription = 'Add a short description for your command';
    public function __construct(UserRepository $userRepository, MailerInterface $mailer )
    {
        parent::__construct(null);
        $this->userRepository = $userRepository;
        $this->mailer=$mailer;
    }
    protected function configure(): void
    {
        $this
            ->setDescription(self::$defaultDescription)
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $arg1 = $input->getArgument('arg1');
        $user = $this->userRepository;
        if ($arg1) {
            $io->note(sprintf('You passed an argument: %s', $arg1));
            $user->findOneByeEmail('samar@talan.com');
            $Name=$user->getUserName();
            
            $Address=$user->getEmail();
            $email = (new Email())
            ->from('admin@talan.com')
            ->to($Address)
            ->subject('Bonjour')
            ->text('Bonjour Bienvenue a talan Academy')
            ->html('Bonjour '.$Name.', Nous vous souhaitons une agréable journée');
             sleep(10); 
             $this->mailer->send($email);
        }
        

        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');

        return 0;
    }
}
