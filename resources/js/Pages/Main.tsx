
import { Head } from '@inertiajs/react';
import AppLayout from '@/Layouts/AppLayout';
import Header from '@/Components/Header';
import Container from '@/Components/Container';


import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { Link, useForm } from '@inertiajs/react';
import { Transition } from '@headlessui/react';
import useTypedPage from '@/Hooks/useTypedPage';
import { ProfileEditProps } from '@/types';
import useRoute from '@/Hooks/useRoute';


interface UpdateProfileInformationProps extends ProfileEditProps {
    className?: string;
}


export default function Main() {

    const route = useRoute();
    const user = useTypedPage().props.auth.user;
    const { data, setData, patch, errors, processing, recentlySuccessful } = useForm({
        name: user.name,
    });

    const submit = (e: { preventDefault: () => void }) => {
        e.preventDefault();
        patch(route('main.update'), {
            preserveScroll: true,
        });
    };


    return (
        <>
            <Head title='Головне' />
            <Header value='Головне' />
            <Container withNoHorizontalPadding>
                <div className='overflow-hidden border bg-white sm:rounded-lg'>
                    <div>
                        <div className='bg-white p-4 sm:p-20'>




        <section>
            <header className='mb-4 px-4 sm:px-0'>
                <h2 className='text-lg font-medium text-slate-900'>Ім`я та прізвище</h2>
                {/* 
                <p className='mt-1 text-sm text-slate-600'>
                    Update your account's profile information and email address.
                </p> */}
            </header>
            <div className=''>
                <form onSubmit={submit} className='space-y-6'>
                    <div>
                        <InputLabel forInput='name' value='Ім`я' />

                        <TextInput
                            id='name'
                            type='text'
                            value={data.name}
                            onChange={(e) => setData('name', e.target.value)}
                            required
                            autoFocus
                            autoComplete='name'
                        />

                        <InputError className='mt-2' message={errors.name} />
                    </div>
                

                    <div className='flex items-center gap-4'>
                        <PrimaryButton disabled={processing}>Зберегти</PrimaryButton>

                        <Transition
                            show={recentlySuccessful}
                            enterFrom='opacity-0'
                            leaveTo='opacity-0'
                            className='transition ease-in-out'>
                            <p className='text-sm text-slate-600'>Збережено.</p>
                        </Transition>
                    </div>
                </form>
            </div>
        </section>





                        </div>
                    </div>
                </div>
            </Container>
        </>
    );
}

Main.layout = (page: any) => <AppLayout children={page} />;
